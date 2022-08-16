<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Artist</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Table</a></div>
                <div class="breadcrumb-item">Artist</div>
            </div>
        </div>

        <div class="section-body">

            <h2 class="section-title">Artist</h2>
            <p class="section-lead">
                <!-- Examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap. -->
            </p>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Artist List</h4>
                            <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add" data-backdrop="false">Add New</a></div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Package Name</th>
                                        <th>Artist Name</th>
                                        <th>Release Date</th>
                                        <th>Sample Audio</th>
                                        <th>Price</th>
                                        <th style="text-align: right;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="show_data">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL ADD -->
        <form>
            <div class="modal" id="Modal_Add" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Artist</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Artist Name</label>
                                <div class="col-md-10">
                                    <input type="text" name="ArtistName" id="ArtistName" class="form-control" placeholder="Artist Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Package Name</label>
                                <div class="col-md-10">
                                    <input type="text" name="PackageName" id="PackageName" class="form-control" placeholder="Package Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Image URL</label>
                                <div class="col-md-10">
                                    <input type="text" name="ImageURL" id="ImageURL" class="form-control" placeholder="Image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Release Date</label>
                                <div class="col-md-10">
                                    <input type="date" name="ReleaseDate" id="ReleaseDate" class="form-control" placeholder="Release Date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Price</label>
                                <div class="col-md-10">
                                    <input type="number" name="Price" id="Price" class="form-control" placeholder="Price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Sample URL</label>
                                <div class="col-md-10">
                                    <input type="text" name="SampleURL" id="SampleURL" class="form-control" placeholder="Sample URL">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal" id="Modal_Edit" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Artist</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Artist Name</label>
                                <div class="col-md-10">
                                    <input type="hidden" name="ArtistID_edit" id="ArtistID_edit" class="form-control" placeholder="Artist Id">
                                    <input type="text" name="ArtistName_edit" id="ArtistName_edit" class="form-control" placeholder="Artist Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Package Name</label>
                                <div class="col-md-10">
                                    <input type="text" name="PackageName_edit" id="PackageName_edit" class="form-control" placeholder="Package Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Image URL</label>
                                <div class="col-md-10">
                                    <input type="text" name="ImageURL_edit" id="ImageURL_edit" class="form-control" placeholder="Image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Release Date</label>
                                <div class="col-md-10">
                                    <input type="date" name="ReleaseDate_edit" id="ReleaseDate_edit" class="form-control" placeholder="Release Date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Price</label>
                                <div class="col-md-10">
                                    <input type="number" name="Price_edit" id="Price_edit" class="form-control" placeholder="Price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Sample URL</label>
                                <div class="col-md-10">
                                    <input type="text" name="SampleURL_edit" id="SampleURL_edit" class="form-control" placeholder="Sample URL">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
        <form>
            <div class="modal" id="Modal_Delete" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Artist</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <strong>Are you sure to delete this record?</strong>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="ArtistID" id="ArtistID" class="form-control">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--END MODAL DELETE-->

    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        show_product(); //call function show all artist

        $('#table-1').dataTable();

        //function show all artist
        function show_product() {
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url('artist/artist_data') ?>',
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        let a = i + 1;
                        html += '<tr>' +
                            '<td>' + a + '</td>' +
                            '<td><img src="' + data[i].ImageURL + '"width="50px" height="50px" alt="Artist Image"> ' + data[i].PackageName + '</td>' +
                            '<td>' + data[i].ArtistName + '</td>' +
                            '<td>' + data[i].ReleaseDate + '</td>' +
                            '<td><audio id="' + data[i].ArtistID + 'A' + '" src="' + data[i].SampleURL + '" preload="auto"></audio><button onclick="PlaySound(' + data[i].ArtistID + ')" style="font-size:24px"><i id="' + data[i].ArtistID + '" class="fa fa-play togg"></i></button></td>' +
                            '<td>' + data[i].Price + '</td>' +
                            '<td style="text-align:right;">' +
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-artistid="' + data[i].ArtistID + '" data-artistname="' + data[i].ArtistName + '" data-packagename="' + data[i].PackageName + '" data-imageurl="' + data[i].ImageURL + '" data-releasedate="' + data[i].ReleaseDate + '" data-price="' + data[i].Price + '" data-sampleurl="' + data[i].SampleURL + '" data-backdrop="false">Edit</a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-artistid="' + data[i].ArtistID + '" data-backdrop="false">Delete</a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save artist
        $('#btn_save').on('click', function() {
            var ArtistID = $('#ArtistID').val();
            var ArtistName = $('#ArtistName').val();
            var PackageName = $('#PackageName').val();
            var ImageURL = $('#ImageURL').val();
            var ReleaseDate = $('#ReleaseDate').val();
            var Price = $('#Price').val();
            var SampleURL = $('#SampleURL').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('artist/save') ?>",
                dataType: "JSON",
                data: {
                    ArtistID: ArtistID,
                    ArtistName: ArtistName,
                    PackageName: PackageName,
                    ImageURL: ImageURL,
                    ReleaseDate: ReleaseDate,
                    Price: Price,
                    SampleURL: SampleURL
                },
                success: function(data) {
                    $('[name="ArtistID"]').val("");
                    $('[name="ArtistName"]').val("");
                    $('[name="PackageName"]').val("");
                    $('[name="ImageURL"]').val("");
                    $('[name="ReleaseDate"]').val("");
                    $('[name="Price"]').val("");
                    $('[name="SampleURL"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click', '.item_edit', function() {
            var ArtistID = $(this).data('artistid');
            var ArtistName = $(this).data('artistname');
            var PackageName = $(this).data('packagename');
            var ImageURL = $(this).data('imageurl');
            var ReleaseDate = $(this).data('releasedate');
            var Price = $(this).data('price');
            var SampleURL = $(this).data('sampleurl');

            $('#Modal_Edit').modal('show');
            $('.modal-backdrop').remove()
            $('[name="ArtistID_edit"]').val(ArtistID);
            $('[name="ArtistName_edit"]').val(ArtistName);
            $('[name="PackageName_edit"]').val(PackageName);
            $('[name="ImageURL_edit"]').val(ImageURL);
            $('[name="ReleaseDate_edit"]').val(ReleaseDate);
            $('[name="Price_edit"]').val(Price);
            $('[name="SampleURL_edit"]').val(SampleURL);
        });

        //update record to database
        $('#btn_update').on('click', function() {
            var ArtistID = $('#ArtistID_edit').val();
            var ArtistName = $('#ArtistName_edit').val();
            var PackageName = $('#PackageName_edit').val();
            var ImageURL = $('#ImageURL_edit').val();
            var ReleaseDate = $('#ReleaseDate_edit').val();
            var Price = $('#Price_edit').val();
            var SampleURL = $('#SampleURL_edit').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('artist/update') ?>",
                dataType: "JSON",
                data: {
                    ArtistID: ArtistID,
                    ArtistName: ArtistName,
                    PackageName: PackageName,
                    ImageURL: ImageURL,
                    ReleaseDate: ReleaseDate,
                    Price: Price,
                    SampleURL: SampleURL
                },
                success: function(data) {
                    $('[name="ArtistID_edit"]').val("");
                    $('[name="ArtistName_edit"]').val("");
                    $('[name="PackageName_edit"]').val("");
                    $('[name="ImageURL_edit"]').val("");
                    $('[name="ReleaseDate_edit"]').val("");
                    $('[name="Price_edit"]').val("");
                    $('[name="SampleURL_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click', '.item_delete', function() {
            var ArtistID = $(this).data('artistid');

            $('#Modal_Delete').modal('show');
            $('.modal-backdrop').remove()
            $('[name="ArtistID"]').val(ArtistID);
        });

        //delete record to database
        $('#btn_delete').on('click', function() {
            var ArtistID = $('#ArtistID').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('artist/delete') ?>",
                dataType: "JSON",
                data: {
                    ArtistID: ArtistID
                },
                success: function(data) {
                    $('[name="ArtistID"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

    });
</script>


<script>
    function PlaySound(melody) {
        var myAudio = document.getElementById(melody + 'A');
        var button = document.getElementById(melody);
        if (myAudio.paused) {
            $("audio").not(myAudio).each(function(index, audio) {
                audio.pause();
            });
            myAudio.play();
            $('i').attr('class', 'fa fa-play');
            button.classList.remove('fa', 'fa-play');
            button.classList.add('fa', 'fa-pause');
        } else {
            $('i').attr('class', 'fa fa-play');
            myAudio.pause();
            button.classList.remove('fa', 'fa-pause');
            button.classList.add('fa', 'fa-play');
        }
    }
</script>