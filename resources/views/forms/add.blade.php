@extends('layouts/simple')

@section('styles')
    <style>
        .input-group{
            display: flex;
            flex-direction: column;
            width: 100%;           
            margin: 10px 0px;
            padding: 10px 0px;
            border-bottom: 1px solid black;
        }
        input[type=text]::placeholder{
            padding-left: 5px;
        }
        input[type=text]{
            padding-left: 5px;
        }
    </style>
@endsection

@section('content')

    <div class='container'>
        <div class='row' style='flex-direction: column; align-items: center;'>
            <form class='col-lg-2' method='POST' action='#'>
                <div class='input-group'>
                    <label> Text field Input :</label>
                    <input name='' type='text' maxlength="255" placeholder='type here'>
                </div>

                <div class='input-group'>
                    <label> Select Input :</label>
                    <select>
                        <option hidden> -- Choose one </option>
                        <option value='Fruit'> 果物 </option>
                        <option value='Food'> 食べ物 </option>
                        <option value='Drink'> 飲み物 </option>
                    </select>
                </div>

                <div class='input-group'>
                    <label> Radio button :</label>
                    <label>
                        <input type='radio'> Permaclick
                    </label>
                </div>

                <div class='input-group'>
                    <label> Radio button Group :</label>
                    <div>
                        <label>
                            <input type='radio' name='color' > Blue
                        </label>
                        <label>
                            <input type='radio' name='color' checked> Red
                        </label>
                        <label>
                            <input type='radio' name='color' > Yellow
                        </label>
                        <label>
                            <input type='radio' name='color' > Green
                        </label>
                    </div>
                </div>

                <div class='input-group'>
                    <label> Checkbox :</label>
                    <label>
                        <input type='checkbox'> I Agree
                    </label>
                </div>

                <div class='input-group'>
                    <label> Checkbox group :</label>
                    <div>
                        <label>
                            <input type='checkbox' name='flavor' > Chocolate
                        </label>
                        <label>
                            <input type='checkbox' name='flavor' checked> Strawberry
                        </label>
                        <label>
                            <input type='checkbox' name='flavor' > Coconut
                        </label>
                        <label>
                            <input type='checkbox' name='flavor' > Pineapple
                        </label>
                    </div>
                    <small>
                        Needs special javascript to work
                    </small>
                </div>

                <div class='input-group'>
                    <input type='submit' value='Enviar'>
                    <input type='reset' value='Recomeçar'>
                </div>
            </form>
        </div>
    </div>

@endsection