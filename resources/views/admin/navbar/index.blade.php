@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">NavBar</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                        @foreach($navbars as $navbar)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>
                                    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                    {{ $navbar->title }}
                                    <form action="{{ route('navbar.destroy', $navbar->id) }}"
                                          method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Удалить"
                                               class="btn btn-danger float-right mx-3">
                                    </form>
                                    <a href="{{ route('navbar.edit', $navbar->id) }}"
                                       class="btn btn-primary float-right">Редактировать</a>
                                </td>
                            </tr>
                            <tr class="expandable-body d-none">
                                <td>
                                    <div class="p-0" style="display: none;">
                                        <table class="table table-hover">
                                            <tbody>
                                            @foreach($navbar->dropdowns as $dropdown)
                                                <tr>
                                                    <td>
                                                        {{ $dropdown->title }}
                                                        <form action="{{ route('dropdown.destroy', $dropdown) }}"
                                                              method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="submit" value="Удалить"
                                                                   class="btn btn-danger float-right mx-3">
                                                        </form>
                                                        <a href="{{ route('dropdown.edit', $dropdown) }}"
                                                           class="btn btn-primary float-right">Редактировать</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td>
                                                    <a href="{{ route('navbar.dropdown.create', $navbar)}}" class="btn btn-primary">Добавить</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>
                                <a href="{{ route('navbar.create') }}" class="btn btn-primary">Добавить</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
