@foreach ($ticket as $ticket)
    <body bgcolor="#E6E6FA">
    <div style="font-family: '微軟正黑體' ">
    <p> <h3 font-color="#000000">電影 :{{ $ticket->name}}</h3></p>
        <p>第{{ $ticket->x}}排{{ $ticket->y}}號</p>
        <p>廳位:{{ $ticket->section}}</p>
        <tr>
            <!-- 任務名稱 -->
            <td class="table-text">
                <div>{{ $ticket->name }}</div>
            </td>

            <!-- 刪除按鈕 -->
            <td>
                <form action="/ticket/{{ $ticket->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button>取消訂票</button>
                </form>
            </td>
        </tr>
    <hr size="8px" align="center" width="100%">
    </div>
@endforeach





