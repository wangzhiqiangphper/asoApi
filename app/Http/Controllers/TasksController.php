<?php
/**
 * Created by PhpStorm.
 * User: Zyang
 * Date: 2017/3/22
 * Time: 下午6:55
 */

namespace App\Http\Controllers;

use App\Account;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use stdClass;
use Validator;

class TasksController extends Controller
{
    /**
     * @return mixed
     */
    public function view(Request $request)
    {
        $agent = $request->query('agent');
        $task = Task::findOrFail(31);
        if ($task->isPageTurning = 1){
            $task->isPageTurning = true;
        }
        else{$task->isPageTurning = false;}
        if ($task->isRealDownload = 1){
            $task->isRealDownload = true;
        }
        else{$task->isRealDownload = false;}
        if ($task->isLaunch = 1){
            $task->isLaunch = true;

        }
        else{$task->isLaunch = false;}
        $account = Account::findOrFail(31);
        $data = ['task_info'=>$task, 'account_info'=>$account];
        $result = ['code'=>0, 'msg'=>'success', 'data'=>$data];
        return response()->json($result);
    }

    public function reports(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'taskId' => 'required|integer',
            'accountId' => 'required|integer',
            'status' => 'required|integer|in:0,1,2,3',
            'balance'=> 'required|numeric',
            'reason' => 'required|string|max:255',
            'agent' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json(['code'=>10003, 'msg'=>'parse error']);
        }
        $result = ['code'=>0, 'msg'=>'success', 'data'=>new stdClass];
        return response()->json($result);
    }

    public function index(){
    $tasks = Task::all();
    return view('/task/index', compact('tasks'));
    }

    public function edit($id){
        $task = Task::findOrFail($id);
        return view('/task/edit', compact('task'));
    }

    public function store(Request $request){
        $input = $request->all();
        return $input;
    }

    public function update(Request $request){
       $task = Task::find($request->get('id'));

       $task->update($request->except('id'));
       return redirect('/task/index');
    }
}