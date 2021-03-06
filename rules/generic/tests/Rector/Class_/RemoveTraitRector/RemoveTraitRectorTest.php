<?php

declare(strict_types=1);

namespace Rector\Generic\Tests\Rector\Class_\RemoveTraitRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Generic\Rector\Class_\RemoveTraitRector;
use Rector\Generic\Tests\Rector\Class_\RemoveTraitRector\Source\TraitToBeRemoved;
use Symplify\SmartFileSystem\SmartFileInfo;

final class RemoveTraitRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    /**
     * @return mixed[]
     */
    protected function getRectorsWithConfiguration(): array
    {
        return [
            RemoveTraitRector::class => [
                RemoveTraitRector::TRAITS_TO_REMOVE => [TraitToBeRemoved::class],
            ],
        ];
    }
}
