<div>
<H1>Add Details for Send Email</H1>

<form action="send-email" method="post">
    @csrf
    <input type="text" name="to" placeholder="Enter email address">
    <br><br>
    <input type="text" name="subject" placeholder="Enter subject">
    <br><br>
    <textarea type="text" name="message" placeholder="Enter ur email here"></textarea>
    <br><br>
    <button>Send</button>
</form>
</div>
