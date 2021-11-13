<form action="{{route('colorado')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="inbase" class="form-label">Username</label>
        <input type="text" class="form-control" name="inusername" id="inusername">
    </div>
    <div class="mb-3">
        <label for="inaltura" class="form-label">Password</label>
        <input type="password" class="form-control" name="inpassword" id="inpassword">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>