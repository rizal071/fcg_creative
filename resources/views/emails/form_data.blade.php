<h2>Formulir Masuk: {{ $data['form_type'] ?? 'Tidak Diketahui' }}</h2>

<table cellpadding="5" cellspacing="0" border="1" style="border-collapse: collapse;">
@foreach($data as $key => $value)
    @if($key !== 'form_type' && $key !== 'file_pendukung')
        <tr>
            <td><strong>{{ ucwords(str_replace('_', ' ', $key)) }}</strong></td>
            <td>{{ is_array($value) ? implode(', ', $value) : $value }}</td>
        </tr>
    @endif
@endforeach
</table>

@if(isset($data['file_pendukung']))
    <p><strong>File pendukung dilampirkan.</strong></p>
@endif
