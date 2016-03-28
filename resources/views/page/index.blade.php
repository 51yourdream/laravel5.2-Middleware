<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜索分页测试</title>
    <link rel="stylesheet" href="{{asset('/static/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="panel panel-info">
                <form class="form-inline" action="{{url('page/index')}}" method="get">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">标题</div>
                            <input type="text" class="form-control" id="exampleInputAmount" name="title" value="{{$parameters['title'],''}}">
                            {{--<div class="input-group-addon">.00</div>--}}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">搜索</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    @foreach($pages as $page)
                        <tr>
                            <td>{{$page->id}}</td>
                            <td>{{$page->title}}</td>
                            <td>{{$page->content}}</td>
                            {{--<td>{{$page->create_at}}</td>--}}
                            {{--<td>{{$page->update_at}}</td>--}}
                        </tr>
                    @endforeach
                </table>
            </div>
            {{$pages->appends($parameters)->render()}}
        </div>
    </div>
</body>
</html>


