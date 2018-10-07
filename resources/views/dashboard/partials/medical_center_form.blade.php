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
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="inputPassword3" placeholder="Phone" name="phone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputlat" class="col-sm-2 col-form-label">Latitude</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputlat" placeholder="Latitude" name="lat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputlong" class="col-sm-2 col-form-label">Longitude</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputlong" placeholder="Longitude" name="long">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAddr" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="inputAddr" placeholder="Address" name="address">
                        </textarea>
                    </div>
                </div>
            </form>
        </div>

