@extends('admin/core-layout.default')

@section('body')
    {{--    <h1>Hello World :)</h1>--}}
    <h2>Collapsible Sidebar Using Bootstrap 4</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.</p>

    <p>첫번째 인자는 배열이나 컬렉션의 각 요소를 렌더링하기 위한 부분적 뷰의 이름입니다. 두번째 인자는 반복 처리하는 배열이나 컬렉션이며 세번째 인수는 뷰에서의
        반복값이 대입되는 변수의 이름입니다. 예를 들어 jobs 배열을 반복 처리하려면 보통 부분적 뷰에서 각 과제를 job 변수로 접근해야 할 것입니다. 현재 반복에서의
        키값은 부분적 뷰에서 key 변수로 접근할 수 있습니다. 또한 지시어에 네번째 인수를 전달할 수도 있습니다. 이 인자는 특정 배열이 비었을 경우 렌더링될 뷰를
        결정합니다.</p>

    <hr>

    <el-button>Hello world!</el-button>
    <el-button type="primary">Hello world!</el-button>
    <el-button type="info">Hello world!</el-button>
    <el-button type="success">Hello world!</el-button>
    <el-button type="warning">Hello world!</el-button>
    <el-button type="danger">Hello world!</el-button>

    <hr>

    <button class="btn btn-secondary">Hello world!</button>
    <button class="btn btn-primary">Hello world!</button>
    <button class="btn btn-info">Hello world!</button>
    <button class="btn btn-success">Hello world!</button>
    <button class="btn btn-warning">Hello world!</button>
    <button class="btn btn-danger">Hello world!</button>
@endsection
