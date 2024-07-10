<div class="col-12">
    <label for="langage" class="form-label">langage</label>
    <input type="text" name="langage" class="form-control" id="langage" 
        value="{{ old('langage', $skill->langage ?? '') }}">
</div>
<div class="col-12">
    <label for="percent" class="form-label">percent</label>
    <input type="text" name="percent" class="form-control" id="percent" 
        value="{{ old('percent', $skill->percent ?? '') }}">
</div>


