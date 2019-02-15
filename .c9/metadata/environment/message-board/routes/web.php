{"filter":false,"title":"web.php","tooltip":"/message-board/routes/web.php","undoManager":{"mark":11,"position":11,"stack":[[{"start":{"row":11,"column":2},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":12,"column":0},"end":{"row":15,"column":61},"action":"insert","lines":["Route::get('messages/{id}', 'MessagesController@show');","Route::post('messages', 'MessagesController@store');","Route::put('messages/{id}', 'MessagesController@update');","Route::delete('messages/{id}', 'MessagesController@destroy');"],"id":3}],[{"start":{"row":12,"column":0},"end":{"row":15,"column":61},"action":"remove","lines":["Route::get('messages/{id}', 'MessagesController@show');","Route::post('messages', 'MessagesController@store');","Route::put('messages/{id}', 'MessagesController@update');","Route::delete('messages/{id}', 'MessagesController@destroy');"],"id":5}],[{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":18,"column":0},"end":{"row":29,"column":51},"action":"insert","lines":["// CRUD","// メッセージの個別詳細ページ表示","Route::get('messages/{id}', 'MessagesController@show');","// メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）","Route::post('messages', 'MessagesController@store');","// メッセージの更新処理（編集画面を表示するためのものではありません）","Route::put('messages/{id}', 'MessagesController@update');","// メッセージを削除","Route::delete('messages/{id}', 'MessagesController@destroy');","","// index: showの補助ページ","Route::get('messages', 'MessagesController@index');"],"id":7}],[{"start":{"row":29,"column":51},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":8}],[{"start":{"row":30,"column":0},"end":{"row":31,"column":59},"action":"insert","lines":["// create: 新規作成用のフォームページ","Route::get('messages/create', 'MessagesController@create');"],"id":9}],[{"start":{"row":28,"column":0},"end":{"row":31,"column":59},"action":"remove","lines":["// index: showの補助ページ","Route::get('messages', 'MessagesController@index');","// create: 新規作成用のフォームページ","Route::get('messages/create', 'MessagesController@create');"],"id":10},{"start":{"row":28,"column":0},"end":{"row":33,"column":83},"action":"insert","lines":["// index: showの補助ページ","Route::get('messages', 'MessagesController@index')->name('messages.index');","// create: 新規作成用のフォームページ","Route::get('messages/create', 'MessagesController@create')->name('messages.create');","// edit: 更新用のフォームページ","Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');"]}],[{"start":{"row":14,"column":0},"end":{"row":16,"column":3},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});"],"id":11},{"start":{"row":14,"column":0},"end":{"row":14,"column":44},"action":"insert","lines":["Route::get('/', 'MessagesController@index');"]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":3},"action":"insert","lines":["// "],"id":12},{"start":{"row":17,"column":0},"end":{"row":17,"column":3},"action":"insert","lines":["// "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":3},"action":"insert","lines":["// "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":3},"action":"insert","lines":["// "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":3},"action":"insert","lines":["// "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":3},"action":"insert","lines":["// "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":3},"action":"insert","lines":["// "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":3},"action":"insert","lines":["// "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":3},"action":"insert","lines":["// "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":3},"action":"insert","lines":["// "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":3},"action":"insert","lines":["// "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":3},"action":"insert","lines":["// "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":3},"action":"insert","lines":["// "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":3},"action":"insert","lines":["// "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":14,"column":44},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":50},"action":"insert","lines":["Route::resource('messages', 'MessagesController');"],"id":14}]]},"ace":{"folds":[],"scrolltop":294.65625,"scrollleft":0,"selection":{"start":{"row":33,"column":86},"end":{"row":33,"column":86},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1549408567317,"hash":"6ce7a184566a9a73120e12420f0228da1a50a241"}