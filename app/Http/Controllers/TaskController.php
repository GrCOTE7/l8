<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('tasks.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return \Illuminate\Http\Response
   */
  public function store(TaskRequest $request)
  {
    $task         = new Task();
    $task->title  = $request->title;
    $task->detail = $request->detail;
    $task->save();

    return back()->with('message', 'La tâche a bien été créée !');
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function edit(Task $task)
  {
    return view('tasks.edit', compact('task'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function update(TaskRequest $request, Task $task)
  {
    $task->title  = $request->title;
    $task->detail = $request->detail;
    $task->state  = $request->has('state');
    $task->save();

    return back()->with('message', 'La tâche a bien été modifiée !');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
  }
}
