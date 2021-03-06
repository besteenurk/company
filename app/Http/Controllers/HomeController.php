<?php

namespace App\Http\Controllers;

use App\Company;
use App\Options;
use App\Surveys;
use App\Questions;
use Symfony\Component\Console\Question\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function get_company()
    {
        return view('company');
    }


    public function post_company(Request $request)
    {
        try {
            $company = new Company;
            $company->name = $request->input('name');
            $company->person = $request->input('person');
            $company->phone = $request->input('phone');
            $company->save();

            return redirect('company')->with("company", $company);

            echo 'record inserted succesfully';

        } catch (Exception $e) {
            return 'try again';
        }
        return "It's added";
    }



    public function get_survey() {
        return view('surveys');
    }



    public function post_survey(Request $request) {

        try {
            $survey = new Surveys;
            $survey->title = $request->input('title');
            $survey->company_id = $request->input('company_id');
            $survey->save();

            $options = new Options;
            $options->text = $request->input('text');
            $options->question_id = $request->input('question_id');
            $options->survey_id = $survey->id;
            $options->save();

            return redirect('surveys')->with("surveys", $survey);
        } catch (Exception $e) {
            return 'try again';
        }
        return "It's added";
    }



    public function get_comp() {

        $data = DB::table('companies')
            ->join('survey', 'companies.id', '=', 'survey.company_id')
            ->select('companies.*','companies.name as c','survey.title as s','companies.id as id')
            ->get();
        return view('companies', ['data' => $data]);
    }


    public function get_c() {

        $company = DB::table('companies')
            ->join('survey', 'companies.id', '=', 'survey.company_id')
            ->join('questions', 'companies.id', '=', 'questions.survey_id')
            ->join('options', 'companies.id', '=', 'options.question_id')
            ->select('companies.*','survey.title as s','questions.q_text as t', 'options.text as o')
            ->get();
        return view('c', ['companies' => $company]);
    }

    public function get_companyy() {
        $companyy = DB::table('questions')
            ->select('questions.q_text as name')
            ->get();
        return view('companyy', ['companyy', $companyy]);
    }

    /*   public function get_companies() {
           $scomp = DB::table('companies')
               ->get();
           return view('companies', ['scomp', $scomp]);
       }*/

    ///////////////////////////

    public function get_questions() {
        return view('questions');
    }
    public function post_questions(Request $request) {

        //    $surveys = new Surveys;
        //  $surveys->save();

        try {
            $questions = new Questions;
            $questions->q_text = $request->input('q_text');
            $questions->survey_id = $request->input('survey_id');
            $questions->has_free_text = $request->input('has_free_text');
            // $questions->survey_id = $surveys->id;
            $questions->save();

            return redirect('questions')->with("company", $questions);

            echo 'record inserted succesfully';

        } catch (Exception $e) {
            return 'try again';
        }
        return "It's added";

    }
    public function get_quest() {
        $quest = DB::table('questions')
            ->select('questions.*', 'questions.q_text as q')
            ->get();
        return view('surveys', ['quest' => $quest]);
    }



    public function data() {
         $dataid = DB::table('companies')
             ->select('companies.*', 'companies.id as id')
             ->get();
         return view('companies', ['dataid' => $dataid]);
     }


// {{dd($datas)}}


}
