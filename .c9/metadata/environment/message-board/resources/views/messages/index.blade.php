{"filter":false,"title":"index.blade.php","tooltip":"/message-board/resources/views/messages/index.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":16,"column":20},"end":{"row":17,"column":52},"action":"remove","lines":["<td>{{ $message->id }}</td>","                    <td>{{ $message->content }}</td>"],"id":2},{"start":{"row":16,"column":20},"end":{"row":17,"column":52},"action":"insert","lines":["<td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>","                    <td>{{ $message->content }}</td>"]}]]},"ace":{"folds":[],"scrolltop":97.4140625,"scrollleft":0,"selection":{"start":{"row":24,"column":11},"end":{"row":24,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1550198039865,"hash":"e90aab076df88ff1273ea8dc442822398a28a468"}