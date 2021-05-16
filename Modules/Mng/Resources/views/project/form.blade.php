<form method="POST" action="/mng/projects" class="needs-validation" novalidate>
   @csrf
   <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" required>
      <div class="invalid-feedback">
         Please input a name
      </div>
   </div>
   <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" rows="3" maxlength="3000"></textarea>
   </div>
   <div class="mb-5">
      <label for="survey_count" class="form-label">Survey Count</label>
      <select class="form-select" name="count">
         <option value="1" selected>1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
      </select>
   </div>
   <div class="mb-5 d-grid">
      <button type="submit" class="btn-primary btn">Submit</button>
   </div>
</form>
