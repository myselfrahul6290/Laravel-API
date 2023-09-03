## EndPoint

-  Get all posts: GET /api/user
-  Get a single post: GET /api/user/{id}
-  Create a new post: POST /api/user
-  Update a post: PUT /api/user/{id}
-  Delete a post: DELETE /api/user/{id}

## Routes

<pre>
Route::get('/user',[userDataController::class,'index']);
Route::get('/user/{id}',[userDataController::class,'show']);
Route::post('/user',[userDataController::class,'store']);
Route::put('/user/{id}',[userDataController::class,'update']);
Route::delete('/user/{id}',[userDataController::class,'destroy']);
</pre>
