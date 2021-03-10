<?php

namespace App\Imports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProjectsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //echo "<pre>";
        dd($row);
        // echo $row;
        //echo "</pre>";

        //exit();
        
        // return new Project([
        //     'id'=>$row['id'],
        //     'ProjectKey'=>$row['projectkey'],
        //     'Key'=>$row['key'],
        //     'Summary'=>$row['summary'],
        //     'IssueType'=>$row['issuetype'],
        //     'Status'=>$row['status'],
        //     'Priority'=>$row['priority'],
        //     'Resolution'=>$row['resolution'],
        //     'Assignee'=>$row['assignee'],
        //     'IssueType'=>$row['issuetype'],
        //     'Reporter'=>$row['reporter'],
        //     'Creator'=>$row['creator'],
        //     'Images'=>$row['images'],
        //     'Description'=>$row['description'],
        // ]);
    }
}
