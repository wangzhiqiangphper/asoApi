<?php
/**
 * Created by PhpStorm.
 * User: Zyang
 * Date: 2017/3/22
 * Time: 下午6:55
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Validator;

class UserController extends Controller
{
    /**
     * @return mixed
     */
    public function view()
    {
        $task = DB::table('task_info')->where('id',1)->first();
        $account = DB::table('account_info')->where('id',1)->first();
        $data = ['task_info'=>$task, 'account_info'=>$account];
        $result = ['code'=>0, 'msg'=>'success', 'data'=>$data];
        return response()->json($result);
    }

    public function reports(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'taskId' => 'required|integer',
            'accountId' => 'required|integer',
            'status' => 'required|integer|in:0,1,2,3', //Int required
            'balance'=> 'required|numeric|',
            'reason' => 'required|string|max:255',
            'agent' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json(['code'=>10003, 'msg'=>'parse error']);
        }
        $result = ['code'=>0, 'msg'=>'success', 'data'=>''];
        return response()->json($result);
    }

}