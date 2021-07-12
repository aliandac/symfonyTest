<?php
// src/Command/JobServiceCommand.php
namespace App\Command;

use App\Library\WorkConsole;
use GuzzleHttp\Client;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class JobServiceCommand extends Command
{
// the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:job-get';

    public array $jobListOne = [];
    public array $jobListTwo = [];

    protected function configure(): void
    {
// ...
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $client = new Client();




        $request1 = new \GuzzleHttp\Psr7\Request('GET', 'http://www.mocky.io/v2/5d47f235330000623fa3ebf7');
        $promise = $client->sendAsync($request1)->then(function ($response) {
            foreach (json_decode($response->getBody()) as $key => $value) {
                $aa = get_object_vars($value);
                $aa2 = $aa[array_key_first($aa)];
                $this->jobListTwo[] = [
                    'zorluk' => $aa2->level,
                    'sure' => $aa2->estimated_duration,
                    'id' => array_key_first($aa),
                ];
            }
            $workConsole = new WorkConsole();

            $workConsole->jobList($this->jobListTwo);

        });
        $promise->wait();

        $request2 = new \GuzzleHttp\Psr7\Request('GET', 'http://www.mocky.io/v2/5d47f24c330000623fa3ebfa');
        $promise = $client->sendAsync($request2)->then(function ($response) {
            foreach (json_decode($response->getBody()) as $key => $value) {
                $aa = get_object_vars($value);
                $this->jobListOne[] = $aa;
            }
            $workConsole = new WorkConsole();

            $workConsole->jobList($this->jobListOne);
        });

        $promise->wait();
        return Command::SUCCESS;

    }
}