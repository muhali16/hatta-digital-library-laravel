<!-- TW Elements -->
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

<!-- Fontawesome icon -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>

@if(session("success") > 0)
    <script>
        iziToast.success({
            title: 'Success',
            position: "bottomRight",
            timeout:5000,
            message: {{session("success")}}
        });
    </script>
@endif
@if(session("failed"))
    <script>
        iziToast.error({
            title: 'Error',
            position: "bottomRight",
            timeout:5000,
            message: {{session("failed")}}
        });
    </script>
@endif
@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.warning({
                title: 'Error',
                position: "bottomRight",
                timeout: 0,
                message: '{{$error}}'
            });
        </script>
    @endforeach
@endif

