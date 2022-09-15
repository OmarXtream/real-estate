@extends('frontend.layouts.app')


@section('content')

    <section class="section">
        <div class="container">
            @if(Session::has('errors'))
            <div class="text-center alert alert-light">
              <h5 style="font-weight: bold;">فضلاً قم بملىء كل الحقول</h5>
            </div>
            @endif

            <div class="row">
            
                <div class="col s12 m8">
                    <div class="contact-content">
                        <h5 style="text-align: center;" contact-title">المعلومات الشخصية</h5>

                        <form action="{{route('InfoForm.create')}}" method="POST">
                            @csrf

                            <div class="input-field col-6 s12">
                                <i class="material-icons prefix">person</i>
                                <input id="name" name="name" type="text" class="validate" value="{{ old('name') }}">
                                <label for="name">الإسم</label>
                            </div>

                            <div class="input-field col-6 s12">
                                <i class="material-icons prefix">phone</i>
                                <input id="phone" name="phone" type="number" value="{{ old('phone') }}" class="validate">
                                <label for="phone">رقم الجوال</label>
                            </div>

                            <div class="input-field col-6 s12">
                                <i class="material-icons prefix">hourglass_empty</i>
                                <input id="Age" name="Age" type="number"  value="{{ old('Age') }}" class="validate">
                                <label for="Age">العمر</label>
                            </div>

                            <div class="input-field col-6 s12">
                                <select name="type" class="browser-default validate">
                                    <option value="" disabled selected>قطاع الوظيفة</option>
                                    <option value="1">قطاع عسكري</option>
                                    <option value="2">قطاع مدني</option>
                                    <option value="3">قطاع خاص</option>
                                </select>
                            </div>
                            

                    </div>
                </div> <!-- /.col -->

                <div class="col s12 m4">
                    <h5 style="text-align: center;" contact-title">المعلومات المالية</h5>
                    <div class="contact-sidebar">

                        <div class="m-t-30">
                            <div class="input-field col-6 s12">
                                <i class="material-icons prefix">date_range</i>
                                <input id="commitments" value="{{ old('commitments') }}" placeholder="الرجاء إدخال المبلغ" name="commitments" type="number" class="validate">
                                <label for="commitments">الالتزامات الشهرية</label>
                            </div>

                        </div>

                        <div class="m-t-30">
                            <div class="input-field col-6 s12">
                                <i class="material-icons prefix">payment</i>
                                <input id="bank" value="{{ old('bank') }}" name="bank" type="text" class="validate">
                                <label for="bank">البنك</label>
                            </div>

                        </div>

                        
                        <div class="m-t-30">
                            <div class="input-field col-6 s12">
                                <i class="material-icons prefix">attach_money</i>
                                <input id="salary" value="{{ old('salary') }}" name="salary" type="number" class="validate">
                                <label for="salary">الراتب</label>
                            </div>

                        </div>

                        <div class="m-t-30">

                            <div class="input-field col-6 s12">
                                <select name="supported" class="browser-default validate">
                                    <option value="" disabled selected>مدعوم من سكني؟</option>
                                    <option value="1">لا</option>
                                    <option value="2">نعم</option>

                                </select>
                            </div>

                        </div>


                        
                        <div class="input-field col s12">
                            <i class="material-icons prefix">speaker_notes</i>
                            <textarea id="notes" name="notes" class="materialize-textarea">{{ old('notes') }}</textarea>
                            <label for="notes">الملاحظات</label>
                        </div>


                    </div>

                    <button class="btn waves-effect waves-light indigo darken-4 btn-large" type="submit">
                        <span>إرسال</span>
                        <i class="material-icons right">send</i>
                    </button>

                </form>

                </div>

                @if (session()->has('message'))
                <div class="alert alert-light">
                    <h3 style="font-weight: bold;">{{ session('message') }}</h3>
                </div>
                @endif
            </div>
        </div>
    </section>

@endsection

