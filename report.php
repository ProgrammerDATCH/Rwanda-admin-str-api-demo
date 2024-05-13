
<div class="container">

    <div class="row">
        <div class="col-12 text-center">
            <h1>REPORT a KID</h1>
            <p>Thank you for taking your time to help the country to resolve homeless children issue <br>and allowing
                this homeless kid to get support from NGO's and other Supporters</p>
        </div>
    </div>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 my-5">

            <form class="row g-3 needs-validation" action="files/report-kid-process.php" method="POST"
                onsubmit="checkSelect(event)" enctype="multipart/form-data" novalidate>
                <div class="col-12 col-md-8">
                    <label for="kid_name" class="form-label">Kid Names</label>
                    <input type="text" class="form-control invalid" id="kid_name"
                        value="<?php if(isset($_GET['kid_name'])){ echo $_GET['kid_name']; } ?>"
                        placeholder="eg: Izabayo Denis" name="kid_name" required>
                    <div class="invalid-feedback">
                        Please enter a kid names!
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <label for="ageSelection" class="form-label">Kid Age</label>
                    <select class="form-select" name="kid_age" id="ageSelection" required>
                        <option value="--" class="text-danger">--Choose Age--</option>
                        <option value="1">1 Years Old</option>
                        <option value="2">2 Years Old</option>
                        <option value="3">3 Years Old</option>
                        <option value="4">4 Years Old</option>
                        <option value="5">5 Years Old</option>
                        <option value="6">6 Years Old</option>
                        <option value="7">7 Years Old</option>
                        <option value="8">8 Years Old</option>
                        <option value="9">9 Years Old</option>
                        <option value="10">10 Years Old</option>
                        <option value="11">11 Years Old</option>
                        <option value="12">12 Years Old</option>
                        <option value="13">13 Years Old</option>
                        <option value="14">14 Years Old</option>
                        <option value="15">15 Years Old</option>
                        <option value="16">16 Years Old</option>
                        <option value="17">17 Years Old</option>
                        <option value="18">18 Years Old</option>
                        <option value="19">19 Years Old</option>
                        <option value="20">20 Years Old</option>
                    </select>
                    <span id="ageSelectSpan"></span>
                </div>


                <div class="form-floating mb-3 col-md-4">
                    <select class="form-select" name="kid_district" class="form-control"
                        onchange="showSectors(this.value)" id="floatingSelectDistrict">
                        <option value="--" class="text-danger">--Choose District--</option>
                        <option value="Bugesera">Bugesera</option>
                        <option value="Burera">Burera</option>
                        <option value="Gakenke">Gakenke</option>
                        <option value="Gasabo">Gasabo</option>
                        <option value="Gatsibo">Gatsibo</option>
                        <option value="Gicumbi">Gicumbi</option>
                        <option value="Gisagara">Gisagara</option>
                        <option value="Huye">Huye</option>
                        <option value="Kamonyi">Kamonyi</option>
                        <option value="Karongi">Karongi</option>
                        <option value="Kayonza">Kayonza</option>
                        <option value="Kicukiro">Kicukiro</option>
                        <option value="Kirehe">Kirehe</option>
                        <option value="Muhanga">Muhanga</option>
                        <option value="Musanze">Musanze</option>
                        <option value="Ngoma">Ngoma</option>
                        <option value="Ngororero">Ngororero</option>
                        <option value="Nyabihu">Nyabihu</option>
                        <option value="Nyagatare">Nyagatare</option>
                        <option value="Nyamagabe">Nyamagabe</option>
                        <option value="Nyamasheke">Nyamasheke</option>
                        <option value="Nyanza">Nyanza</option>
                        <option value="Nyarugenge">Nyarugenge</option>
                        <option value="Nyaruguru">Nyaruguru</option>
                        <option value="Rubavu">Rubavu</option>
                        <option value="Ruhango">Ruhango</option>
                        <option value="Rulindo">Rulindo</option>
                        <option value="Rusizi">Rusizi</option>
                        <option value="Rutsiro">Rutsiro</option>
                        <option value="Rwamagana">Rwamagana</option>
                    </select>
                    <label for="floatingSelectDistrict">Choose District please!</label>
                    <span id="districtSelectSpan"></span>
                </div>

                <div class="form-floating mb-3 col-md-4">
                    <select class="form-select" name="kid_sector" onchange="showCells(this.value)" class="form-control"
                        id="sectorsSelection">
                        <option value="--" class="text-danger">--Choose Sector--</option>
                    </select>
                    <div class="invalid-feedback">
                        Please choose a Sector!
                    </div>
                    <label for="sectorsSelection">Choose Sector please!</label>
                    <span id="sectorSelectSpan"></span>
                </div>

                <div class="form-floating mb-3 col-md-4">
                    <input type="text" class="form-control invalid" id="cellsSelection"
                        value="<?php if(isset($_GET['kid_cell'])){ echo $_GET['kid_cell']; } ?>"
                        placeholder="eg: Amasangano" name="kid_cell" required>
                    <label for="cellsSelection">Cell Name</label>
                    <div class="invalid-feedback">
                        Please enter a name of Cell!
                    </div>
                </div>

                <div class="col-12 my-2">
                    <label for="kidDetails" class="form-label">More Details of Kid: </label>
                    <textarea name="kid_details" class="form-control" id="kidDetails"
                        placeholder="eg: uyu mwana yarigaga arivamo kubera ababyeyi be bapfuye...."
                        required><?php if(isset($_GET['kid_details'])){ echo $_GET['kid_details']; } ?></textarea>
                    <div class="invalid-feedback">
                        Please enter more details of a Kid!
                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <label for="kid_father" class="form-label">Kid Father's Name (optional)</label>
                    <input type="text" class="form-control invalid" id="kid_father"
                        value="<?php if(isset($_GET['kid_father'])){ echo $_GET['kid_father']; } ?>"
                        placeholder="eg: Turambe Jean Bosco" name="kid_father">
                </div>


                <div class="col-12 col-md-6">
                    <label for="kid_mother" class="form-label">Kid Mother's Name (optional)</label>
                    <input type="text" class="form-control invalid" id="kid_mother"
                        value="<?php if(isset($_GET['kid_mother'])){ echo $_GET['kid_mother']; } ?>"
                        placeholder="eg: Uwase Nadine" name="kid_mother">
                </div>


                <div class="col-12 col-md-6">
                    <label for="kid_neighbour" class="form-label">Kid Neighbour/Guardian's Name (optional)</label>
                    <input type="text" class="form-control invalid" id="kid_neighbour"
                        value="<?php if(isset($_GET['kid_neighbour'])){ echo $_GET['kid_neighbour']; } ?>"
                        placeholder="eg: Uwimana Chantal" name="kid_neighbour">
                </div>


                <div class="col-12 col-md-6">
                    <label for="kid_neighbour_phone" class="form-label">Kid Neighbour/Guardian's Phone (optional)</label>
                    <input type="number" class="form-control invalid" id="kid_neighbour_phone"
                        value="<?php if(isset($_GET['kid_neighbour_phone'])){ echo $_GET['kid_neighbour_phone']; } ?>"
                        placeholder="eg: 078XXXXXXX" name="kid_neighbour_phone">
                </div>

                
                <div class="col-12">
                    <label for="educationSelection" class="form-label">Kid Education Level</label>
                    <select class="form-select" name="kid_education" id="educationSelection" required>
                        <option value="" class="text-danger">--Choose Education background--</option>
                        <option value="0">Not studied</option>
                        <option value="inPrimary">Stopped in Primary</option>
                        <option value="outPrimary">Finished Primary</option>
                        <option value="inSecondary">Stopped in Secondary</option>
                        <option value="outSecondary">Finished Secondary</option>
                    </select>
                    <span id="ageSelectSpan"></span>
                </div>



                <div class="col-md-6">
                    <label for="kidPhone" class="form-label">Reporter Phone Number: </label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="kidPhonePrepend"><i class="bi bi-whatsapp"></i></span>
                        <input type="number" placeholder="078XXXXXXX" class="form-control" id="kidPhone"
                            aria-describedby="kidPhonePrepend" name="kid_phone"
                            value="<?php if(isset($_GET['kid_phone'])){ echo $_GET['kid_phone']; } ?>" required>
                        <div class="invalid-feedback">
                            Please enter Valid Phone number!
                        </div>
                    </div>
                </div>

                <input type="hidden" name="reporter_email"
                    value="<?php if(isset($row['user_email'])){echo $row['user_email'];} else {echo "non-registered";} ?>">

                <div class="col-md-6 ">
                    <label for="imageOfKid" class="form-label">Choose image of a Kid</label>
                    <input type="file" id="imageOfKid" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg"
                        class="form-control" aria-label="file example" required>
                    <div class="invalid-feedback">Please choose image of a Kid!</div>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-success" type="submit" name="submit"><i class="bi bi-shop"></i>
                        &nbsp;&nbsp;REPORT NOW</button>
                </div>
            </form>

        </div>
        <div class="col-2"></div>
    </div>
    
</div>