@extends('layouts.app')

@section('title', 'Обратная связь')

@section('content')
    @if(isset($sendResult))
        @if($sendResult == true)
            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Спасибо, что связались с нами! Мы рассмотрим Ваше сообщение в ближайшее время.</div>
        @else
            <!-- Error message -->
            <div class="alert alert-danger" role="alert" id="error_message">Сообщение не было отправлено. Попробуйте попытку позднее.</div>
        @endif
    @endif


    <form class="well form-horizontal" action="/feedback" method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend>Напишите нам!</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label">Имя</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="name" placeholder="Имя Фамилия" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label">E-Mail</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="example@domain.com" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text area -->
            <div class="form-group">
                <label class="col-md-2 control-label">Сообщение</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control feedback-textarea" name="message" placeholder="" maxlength="3000"></textarea>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-2 control-label"></label>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-warning">Отправить <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>

        </fieldset>
    </form>
@endsection
