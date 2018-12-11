
<!---Feature--------------------------------------------------------------------------------------->
<label for="refFeature">Select feature :</label>
<select class="form-control" id="refFeature" name="refFeature">
    <option selected value="">Choose...</option>
    <?php foreach ($features as $feature) {?>
        <option value="<?= $feature->refFeature ?>"><?= $feature->titleLocalized ?></option>
    <?php } ?>
</select>


