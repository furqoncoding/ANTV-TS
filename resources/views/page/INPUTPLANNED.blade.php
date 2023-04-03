
    <form class="form-horizontal" method='POST' action="{{action('PageController@insert_INPUTPLANNED')}}" enctype="multipart/form-data">
    {{ csrf_field() }}


            <div class="parent">
                    <div style="width: 98%">
                        <label>Nomor Paket</label><br>
                        <input class="textinp" style="align-self: center; width: 83%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;" id="nomor_paket" type="text" class="form-control" name="nomor_paket">
                    </div>


                    <div style="width: 98%">
                        <label>Nomor Media Order</label><br>
                        <input class="textinp" style="align-self: center; width: 83%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;" id="no_media_order" type="text" class="form-control" name="no_media_order">
                    </div>
            </div>

            <div class="parent">
                    <div style="width: 98%">
                        <label>Advertiser Product</label><br>
                        <input class="textinp" style="align-self: center; width: 83%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;" id="advertiser_product" type="text" class="form-control" name="advertiser_product">
                    </div>


                    <div style="width: 98%">
                        <label>AGENCY</label><br>
                        <input class="textinp" style="align-self: center; width: 83%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;" id="agency" type="text" class="form-control" name="agency">
                    </div>
            </div>

            <div class="parent" style="margin-top: 3%; height: 20%;">
                        <button type="submit" style="width: 100%; height: 50%;border-radius: 12px;color: white;background-image: linear-gradient(to right, #4682B4 8%, #6A5ACD 38%, #800080 100%);cursor: pointer;border-color: white;">
                            CONFIRM
                        </button>
            </div>

    </form>