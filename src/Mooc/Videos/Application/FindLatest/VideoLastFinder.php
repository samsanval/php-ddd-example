<?php


namespace CodelyTv\Mooc\Videos\Application\FindLatest;


use CodelyTv\Mooc\Videos\Domain\Video;
use CodelyTv\Mooc\Videos\Domain\VideoRepository;

final class VideoLastFinder
{
    public function __construct(private VideoRepository $repository)
    {

    }

    public function __invoke(): Video
    {
        return $this->repository->searchLatest();
    }

}