<?php


namespace CodelyTv\Mooc\Videos\Domain;


class VideoDateInsert extends \DateTime
{

    public function value(): string
    {
        return $this->format(\DATE_ATOM);
    }
}