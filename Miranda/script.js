var t1 = gsap.timeline()

t1.to("#page1",{
    y:"100vh",
    scale:0.5,
    duration:0.2,
})
t1.to("#page1",{
    y:"-100vh",
    duration:1.5,
}) 
t1.to("#page1",{
    rotate:-360,
    duration:1,
    delay:0.5,
    y:"0vh",
    scale:1,
})