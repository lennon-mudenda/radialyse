<?php
/**
 * Created by PhpStorm.
 * User: lenny
 * Date: 10/6/18
 * Time: 12:05 PM
 */?>


        <div class="mT-30">
            <form>
                @csrf
                <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <select id="inputState" class="form-control">
                            <option selected="selected">Medical Test type</option>
                            @foreach($medical_test_types as $test_type)
                                <option value="{{ $test_type->id }}">{{ $test_type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                    </div>
                </div>
            </form>
        </div>

