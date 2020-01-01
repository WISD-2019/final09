@extends('frontend.layouts.master')
@section('title','電影售票')
@section('content')
    <!-- Page Content -->
    <html lang="zh-TW">

    <body>

    <div class="container">
        <h2>開始訂票</h2>
        <table class="table">
            <tbody>
            <tr>
                <th scope="col">票種</th>
                <th scope="col">數量</th>
                <th scope="col">電影名稱</th>
                <th scope="col">放映時間</th>
                <th scope="col">票價</th>
            </tr>
            <tr>
                <td>
                    全票
                </td>
                <td>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>
                            <select name="formGender">
                                <option value="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>
                            <select name="formGender">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>
                            <select name="formGender">
                                <option value="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </p>
                    </div>
                </td>
                <td>280</td>
            </tr>
            <tr>
                <td>
                    愛心票
                </td>
                <td>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>
                            <select name="formGender">
                                <option value="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>
                            <select name="formGender">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>
                            <select name="formGender">
                                <option value="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </p>
                    </div>
                </td>
                <td>220</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit"  class="btn btn-success">
                                <i class="fa fa-plus"></i> 下一步
                            </button>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    </body>
    </html>
@endsection
