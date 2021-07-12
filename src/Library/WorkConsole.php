<?php


namespace App\Library;


use App\Controller\WorksController;
use App\Entity\Works;
use Doctrine\ORM\EntityNotFoundException;

class WorkConsole
{

    private array $devList = [
        1 => [
            'time' => 1,
            'difficulty' => 1
        ],

        2 => [
            'time' => 1,
            'difficulty' => 2
        ],

        3 => [
            'time' => 1,
            'difficulty' => 3
        ],

        4 => [
            'time' => 1,
            'difficulty' => 4
        ],

        5 => [
            'time' => 1,
            'difficulty' => 5
        ]
    ];
        

    public function jobList($jobList)
    {
        $this->store($jobList , $this->devList);

    }

    private function store($jobs,$devList)
    {
        foreach ($jobs as $job) {
            foreach ($devList as $key => $dev) {
                switch ($job['zorluk']){
                    case 1;
                    $this->devToJobs($job['sure'],$key,$job['id'],1);
                    break;
                    case 2;
                        $this->devToJobs($job['sure'],$key,$job['id'],2);
                    break;
                    case 3;
                        $this->devToJobs($job['sure'],$key,$job['id'],3);
                    break;
                    case 4;
                        $this->devToJobs($job['sure'],$key,$job['id'],4);
                    break;
                    case 5;
                        $this->devToJobs($job['sure'],$key,$job['id'],5);
                    break;
                }
            }
        }

    }

    private function devToJobs($estimated,$dev,$job,$level)
    {
        $works = new Works();
        $works->setEstimatedDuration($estimated);
        $works->setDevId($dev);
        $works->setJob($job);
        $works->setLevel($level);
    }
}