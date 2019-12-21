<p>محتوى الرساله</p>

<p><strong>الاسم:</strong> {{ $request->name }}</p>
<p><strong>البريد الالكتروني:</strong> {{ $request->email }}</p>
<p><strong>رقم الهاتف:</strong>  {{ ($request->number == "") ? "لايوجد" : $request->number }}</p>
<p><strong>محتوى الرساله:</strong> {{ $request->message }}</p>

