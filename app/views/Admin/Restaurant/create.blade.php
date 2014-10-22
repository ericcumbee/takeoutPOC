 @extends('layouts.main.layout')
 @section('content')
 <div class="row col-md-8">
    {{\Form::open()}}
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="name" class="form-control" id="Name" placeholder="Name">
        </div>
        <div class="form-group">
                    <label for="category">Name</label>
                    <select id="category" name="category" class="form-control">
                      {{$categories}}
                    </select>
        </div>
        <div class="checkbox">
            <label>
              <input type="checkbox" name="enabled" id="enabled" value="true"> Enabled
            </label>
          </div>
          <button type="submit" class="btn btn-link">submit</button>
    {{\Form::close()}}
 </div>
 @stop