<article>
<section class="container">
        <h1 class="bmi">BMI CALCULATOR</h1>
      </section>
      <section class="container">
        <div class="row">
          <div class="col-4"></div>
          <div class="col-4">
            <form action="./index.php?content=calculate_bmi" method="post">
              <div class="form-row">
              <div class="form-group col-4">
                  <label for="bodymass">Age</label>
                  <input type="number" step="any" class="form-control" id="age" placeholder="Age" name="age" min="0" max="800">
                </div>
                <div class="form-group col-4">
                  <label for="bodymass">Weight (kg)</label>
                  <input type="number" step="any" class="form-control" id="bodymass" placeholder="Weight" name="bodymass" min="0" max="800" required>
                </div>
                <div class="form-group col-4">
                  <label for="bodylength">Length (m)</label>
                  <input type="number" step="any" class="form-control" id="bodylength" placeholder="Length" name="bodylength" min="0.81" max="2.80" required>
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Submit form">Calculate BMI!</button>
            </form>


</article>