<?php

namespace Kanboard\Plugin\DueDate;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{

    public function initialize()
    {
        $this->template->hook->attach('template:project-header:view-switcher', 'DueDate:project_header/views');
        $this->template->setTemplateOverride('board/table_tasks', 'DueDate:board/table_tasks');
//        $this->template->hook->attach('template:project:dropdown', 'DueDate:board/dropdown');
        $this->template->hook->attach('template:project:sidebar', 'DueDate:board/sidebar');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__ . '/Locale');
    }

    public function getPluginName()
    {
        return 'DueDate';
    }

    public function getPluginDescription()
    {
        return t('Allows sorting all tasks in all columns by due date, date of last modification or how they were placed on the board. With three clicks.');
    }

    public function getPluginAuthor()
    {
        return 'JustFxDev (Fx), David Morlitz';
    }

    public function getPluginVersion()
    {
        return '1.2.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/JustFxDev/kanboard-duedate';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.41';
    }
}
