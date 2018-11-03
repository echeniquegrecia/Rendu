def display_time(par):

    import time 
    print( time.strftime("%H:%M:%S, %A, %w* day of the %W* week of %Y, %B", time.gmtime(par)))
   