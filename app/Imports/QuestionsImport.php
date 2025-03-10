<?php

namespace App\Imports;

use App\Models\Quiz;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    protected $requestData;
    public function __construct($requestData)
    {
        $this->requestData = $requestData;
    }
    public function model(array $row)
    {
        $question = new Quiz();

        $question->course_id = (int)$this->requestData['course_id'];
        $question->batch_id = (int)$this->requestData['batch_id'];
        $question->module_id = (int)$this->requestData['module_id'];
        $question->exam_id = (int)$this->requestData['exam'];
        $question->question = $row['questions'] ?? '';
        $question->answer = $row['answers'] ?? '';
        $question->option_a = $row['option_a'] ?? '';
        $question->option_b = $row['option_b'] ?? '';
        $question->option_c = $row['option_c'] ?? '';
        $question->option_d = $row['option_d'] ?? '';
        $question->status = 1;

        $question->save();

    }
}
