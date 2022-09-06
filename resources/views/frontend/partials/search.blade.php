
<!-- SEARCH SECTION -->

<section class="indigo darken-2 white-text center">
    <div class="container">
        <div class="row m-b-0">
            <div class="col s12">

                <form action="{{ route('search')}} " method="GET">

                    <div class="searchbar">
                        <div class="input-field col s12 m3">
                            <input type="text" name="city" id="autocomplete-input" class="autocomplete custominputbox" autocomplete="off">
                            <label for="autocomplete-input">اكتب المدينة او المنطقة</label>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="type" class="browser-default">
                                <option value="" disabled selected>اختر النوع</option>
                                <option value="apartment">شقة</option>
                                <option value="house">بيت</option>
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="purpose" class="browser-default">
                                <option value="" disabled selected>الغرض</option>
                                <option value="rent">إيجار</option>
                                <option value="sale">بيع</option>
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="bedroom" class="browser-default">
                                <option value="" disabled selected>غرفة نوم</option>
                                @if(isset($bedroomdistinct))
                                    @foreach($bedroomdistinct as $bedroom)
                                        <option value="{{$bedroom->bedroom}}">{{$bedroom->bedroom}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <input type="text" name="maxprice" id="maxprice" class="custominputbox">
                            <label for="maxprice">السعر الأعلى</label>
                        </div>
                        
                        <div class="input-field col s12 m1">
                            <button class="btn btnsearch waves-effect waves-light w100" type="submit">
                                <i class="material-icons">بحث</i>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>