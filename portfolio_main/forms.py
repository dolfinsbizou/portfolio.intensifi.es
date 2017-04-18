from django import forms

class ContactForm(forms.Form):
    email = forms.EmailField(label="Adresse e-mail")
    subject = forms.CharField(label="Sujet", max_length=50)
    content = forms.CharField(widget=forms.Textarea, label="Message")

