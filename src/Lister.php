<?php

declare(strict_types=1);

namespace Changelog\RepositoryLister;

use Illuminate\Support\Collection;

interface Lister
{
    public function byUser(string $uuid, ?array $options): Collection;

    public function byTeam(string $uuid, ?array $options): Collection;
}
