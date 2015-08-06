<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    public function watch()
    {
        $this->taskWatch()
            ->monitor(['assets/css/style.css', 'assets/js/script.js', 'assets/assets.ini'], function () {
                $this->rebuild();
            })
            ->run();
    }

    public function rebuild() {
        $this->say("Starting Asset rebuild");
        $this->_exec('mini_asset build --config assets/assets.ini');
        $this->say("Assets rebuilt successfully!");

    }
}