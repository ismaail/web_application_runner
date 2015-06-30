<?php

/**
 * Class Runner
 */
class Runner
{
    /**
     * __Contructor mrthod
     */
    public function __construct()
    {
        $port = $this->getPort();

        $this->run($port);

        printf("running on localhost:%d\n", $port);
    }

    /**
     * Run a local web server on the background
     *
     * @param integer $port the port number
     */
    private function run($port)
    {
        shell_exec('python -m SimpleHTTPServer ' . $port . ' >/dev/null 2>&1 &');
        //shell_exec('google-chrome http://localhost:' . $port);
    }

    /**
     * @return int
     */
    private function getPort()
    {
        $config_file_name = '.port';

        if (file_exists($config_file_name)) {
            return (int)file_get_contents($config_file_name);
        }

        // generate a new port
        $port = mt_rand(2000, 9000);

        file_put_contents($config_file_name, $port);

        return $port;
    }
}
