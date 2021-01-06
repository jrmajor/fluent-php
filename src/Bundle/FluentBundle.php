<?php

namespace Major\Fluent\Bundle;

use Major\Fluent\Exceptions\Bundle\MessageExistsException;
use Major\Fluent\Exceptions\Bundle\TermExistsException;
use Major\Fluent\Exceptions\ParserException;
use Major\Fluent\Node\Syntax\Entries\Message;
use Major\Fluent\Node\Syntax\Entries\Term;
use Major\Fluent\Node\Syntax\FluentResource;
use Major\Fluent\Node\Syntax\Junk;
use Major\Fluent\Parser\FluentParser;

class FluentBundle
{
    /** @var array<string, Message> */
    protected array $messages = [];

    /** @var array<string, Term> */
    protected array $terms = [];

    public function __construct(
        protected string $locale,
        protected bool $strict = false,
        protected bool $allowOverrides = false,
    ) { }

    public function addResource(
        FluentResource $resource,
        bool $allowOverrides = null,
    ): static {
        $allowOverrides ??= $this->allowOverrides;

        foreach ($resource->body as $entry) {
            if (
                $entry instanceof Junk
                && ! empty($entry->annotations)
                && $this->strict
            ) {
                $annotation = $entry->annotations[0];

                throw new ParserException($annotation->code, $annotation->arguments);
            }

            if ($entry instanceof Message) {
                if (! $allowOverrides && $this->hasMessage($entry->id->name)) {
                    throw new MessageExistsException($entry->id->name);
                }

                $this->messages[$entry->id->name] = $entry;
            }

            if ($entry instanceof Term) {
                if (! $allowOverrides && $this->hasTerm($entry->id->name)) {
                    throw new TermExistsException($entry->id->name);
                }

                $this->terms[$entry->id->name] = $entry;
            }
        }

        return $this;
    }

    public function addRaw(string $ftl, bool $allowOverrides = null): static
    {
        $parser = new FluentParser();

        $this->addResource(
            $parser->parse($ftl),
            $allowOverrides,
        );

        return $this;
    }

    public function hasMessage(string $id): bool
    {
        return array_key_exists($id, $this->messages);
    }

    public function hasTerm(string $id): bool
    {
        return array_key_exists($id, $this->terms);
    }
}
