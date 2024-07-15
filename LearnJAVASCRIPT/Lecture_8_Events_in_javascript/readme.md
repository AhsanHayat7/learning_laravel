The change in the state of an object is known as a Event.
Events are fired to notify code of "interesting changes" that may affect code excecution.



.Mouse events (click,double click etc.)
.Keyboard events(Keypress,keyup,keydown)
.Form events (submit etc.)
.Print event and many more




Event object

It is special object that has details about the event.
All event handlers have access to the Event Objects properties and methods.

node.event =(e)=>{
    //handle here
}


Eventlisteners
with the help of eventlistener we can do the same work multiple times 