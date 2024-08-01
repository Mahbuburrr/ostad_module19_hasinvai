<select name=""  id="taskStatus" onChange='filterStatus()' class="bg-gray-50 border border-gray-300 text-gray-800">
        <option value="all" @if($status =='all') selected @endif>All</option>
        <option value="completed" @if($status =='completed') selected @endif> completed</option>
        <option value="pending" @if($status =='pending') selected @endif>pending</option>
    </select>

    <script>
        function filterStatus(){
            let status=document.getElementById('taskStatus').value;
            if(status=='all'){
                location.href="/tasks"
            }
            else{
                location.href="/tasks?status="+status
            }
        }
    </script>