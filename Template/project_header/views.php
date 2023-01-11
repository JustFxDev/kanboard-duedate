<?php
//      $sort = $this->app->configModel->get('duedate_board_sort_method');

      $sort = $this->task->projectMetadataModel->get($project['id'], 'DueDate_Board_Sort_Method');
      $dividers = $this->task->projectMetadataModel->get($project['id'], 'DueDate_Board_Dividers');

      if ($sort == null) {
         $sort = "duedate_board";
      }

      if ($dividers == null) {
         $dividers = "duedate_board_dividers_off";
      }

      switch ($sort) {
         case "duedate_due": $sorttext = t("Due"); break;
         case "duedate_modified": $sorttext = t("Mod"); break;
         default: $sorttext = t("Def");
      }

      if ( $dividers == "duedate_board_dividers_on") {
         $dividertext = t(" / Div. on");
      } else {
         $dividertext = t(" / Div. off");
      }

?>
<li <?= $this->app->checkMenuSelection('DueDateConfigController', 'show', 'DueDate') ?>>
      <?= $this->url->icon('sort', t('Sorted by ') . $sorttext . $dividertext, 'DueDateConfigController', 'show', array('plugin' => 'DueDate','project_id' => $project['id'])) ?></li>
</li>
