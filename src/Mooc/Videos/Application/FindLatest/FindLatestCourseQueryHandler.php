<?php


namespace CodelyTv\Mooc\Videos\Application\FindLatest;


use CodelyTv\Mooc\Videos\Domain\Video;
use CodelyTv\Shared\Domain\Bus\Query\QueryHandler;

final class FindLatestCourseQueryHandler implements QueryHandler
{
    public function __construct(private VideoLastFinder $finder)
    {

    }
    public function __invoke(FindLatestCourseQuery $query): Video
    {
        return $this->finder->__invoke();
    }
}