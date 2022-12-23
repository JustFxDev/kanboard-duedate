23.12.2022 - THIS PLUGIN HAS BEEN TRANSFERRED FROM THE ORIGINAL REPOSITORY AND WILL BE FURTHER MAINTAINED HERE



[![Latest release](https://img.shields.io/github/v/release/JustFxDev/kanboard-duedate)](https://github.com/JustFxDev/kanboard-duedate/releases)
[![GitHub license](https://img.shields.io/github/license/JustFxDev/kanboard-duedate)](https://github.com/JustFxDev/kanboard-duedate/blob/master/LICENSE)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/JustFxDev/kanboard-duedate/graphs/contributors)

**:star: If you use it, you should star it on Github!**
*It's the least you can do for all the work put into it!*

Due Date sorting for Kanboard
=============================

Enable sorting columns by due date for Kanboard.

- Preferences are set via new Settings panel
- Button appears at the top of each board to quickly toggle between "due date" and "default" sorting

Advantages
----------
- Easy switching between
  - Show all tasks in all columns by due date
  - Show all tasks in all columns by last modification of a task
  - Show all tasks in all columns in order of creation (Kanboard default view)
- Enter date or time period (e.g. +10 days from today) to use fictitious due date, if a task has no due date set, to display these tasks accordingly
- Optionally show a separator between overdue tasks and tasks that are not yet overdue
- Display in the board header what kind of sorting is currently active
- Multillanguage Support (English and German at the moment, help wanted for more translations)

Screenshots
-----------

### New button at the top of the page

This plugin adds a new "Sorted by...." button to the top of each page in the toolbar.  The button will
show you whether the current sort is "due date" or "board order" (the original way).  Clicking on
the button will take you to the settings panel, where you can change the sorting.

**NOTE:**  This setting affects every board and is stored in your user preferences.

![Toolbar button](https://user-images.githubusercontent.com/11982098/32742491-9b1c975a-c877-11e7-886f-107e73b1d06e.png)

### Settings panel

The settings panel will allow you to change the sorting order.  The current sorting method will be initially
selected by default.  

If you came to this settings panel by clicking on the tool bar button the URL you came from will be shown in the
"Redirect you back to" box.  When you click Save you will be returned to the URL that is shown.

If you arrived at the settings panel without clicking on the tool bar button "No redirection" will be shown and
pressing Save will leave you on the settings page.

![Settings panel](https://user-images.githubusercontent.com/11982098/32742555-c8896fec-c877-11e7-8e2f-9a28eadb3cb0.png)

Author
------

- David Morlitz
- Fx (since v1.2.0)
- License MIT

Requirements
------------

- Kanboard >= 1.0.40

Installation
------------

You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/DueDate`
3. Clone this repository into the folder `plugins/DueDate`

Note: Plugin folder is case-sensitive.
