#!/usr/bin/python
# -*- coding: utf-8 -*-

# Intention Repeater created by Thomas Sweet
# Updated 10/27/2020 v7.0
# Requires Python v3.5.3 or greater
# Repeats intention up to 1M+ times per second
# Usage instructions: https://www.intentionrepeater.com/usage.html
# Run using Windows: intention_repeater.py
# Run using Linux/MacOS: python3 intention_repeater.py
# Automated Example Linux/MacOS: python3 intention_repeater.py 8 "HH:MM:SS" "Intentions/Filename with Intentions"
# Automated Example Windows: intention_repeater.py 8 "HH:MM:SS" "Intentions/Filename with Intentions"
# Intention Repeater is powered by a Servitor (20 Years / 2000+ hours in the making)
# Servitor Info: https://web.archive.org/web/20200915191532/https://enlightenedstates.com/2017/04/07/servitor-just-powerful-spiritual-tool/
# Website: https://www.intentionrepeater.com/
# Forum: https://forums.intentionrepeater.com/
# Licensed under GNU General Public License v3.0
# This means you can modify, redistribute and even sell your own modified software, as long as it's open source too and released under this same license
# https://choosealicense.com/licenses/gpl-3.0/

import time, sys, sched
from math import ceil, log10

def human_format(num):
    num = float('{:.3g}'.format(num))
    magnitude = 0
    while abs(num) >= 1000:
        magnitude += 1
        num /= 1000.0
    return '{}{}'.format('{:f}'.format(num).rstrip('0').rstrip('.'), [
        '',
        'K',
        'M',
        'B',
        'T',
        'Q',
        ][magnitude])


print("Intention Repeater v7.0 software created by Thomas Sweet.\n")
print("This software comes with no guarantees or warranty of any kind.\n")

args = list(sys.argv)

try:
    intensityparam = args[1]
    runtimeparam = args[2]
    intentparam = args[3]
except:
    intensityparam = ''
    runtimeparam = ''
    intentparam = ''

list_write = []

intention = ''
intensity = ''

if intentparam == '':
    while intention == '':
        intention = input('What is your intent?: ')
else:
    intention = intentparam

# We want to cancel negative intentions. Regulate energy so that it doesn't get overpowering.
# Choose the most effective and efficient path. And conclude with it is done on each iteration.

process_energy_statement = ' REGULATE AND INTEGRATE OM IT IS DONE'

intentionval = intention + ' ' + process_energy_statement

benchmark = 0
start_time = float(time.time())

# See how many iterations the processor can run in one second.

while float(time.time()) - start_time < 1.0:
    benchmark += 1
    list_write.append(intentionval)

list_write.clear()

# Determine how many 0's the benchmark number would equate to. Like 100k or a million or so iterations in a second.
# Add 1 for any partial million or 100k left over.

maxintensitylevel = ceil(log10(benchmark)) + 1

if intensityparam == '':
    while intensity is not int:
        try:
            intensity = int(input('Intensity [1-'
                            + str(maxintensitylevel) + ']: '))
            break
        except ValueError:
            print("Please enter a valid intensity value.")
else:
    intensity = int(intensityparam)

if intensity > maxintensitylevel:
    intensity = maxintensitylevel

if intensity < 1:
    intensity = 1

if intensity == maxintensitylevel:
    maxintensity = benchmark
else:
    maxintensity = 10 ** (intensity - 1)

num_writes = 0

print("Press CTRL-C to stop running.\n")

# Calculate how long it takes to run the number of iterations for level of intensity chosen.

start_time = float(time.time())
for d in range(maxintensity):
    list_write.append(intentionval)

# If run the last second before midnight, benchmark again.

if float(time.time() - start_time) < 0:
    list_write.clear()
    for d in range(maxintensity):
        list_write.append(intentionval)

sleeptime = 1.0 - float(time.time() - start_time)

list_write.clear()

# We write to memory a certain number of times to repeat the intention

try:
    while True:
        for d in range(maxintensity):
            list_write.append(intentionval)
            num_writes += 1
            if num_writes % maxintensity == 0:
                sys.stdout.write('  ' + time.strftime('%H:%M:%S',
                                 time.gmtime(int(num_writes
                                 / maxintensity))) + ' ['
                                 + human_format(num_writes) + '] '
                                 + intention + '   \r')
                sys.stdout.flush()
                list_write.clear()
                if runtimeparam == time.strftime('%H:%M:%S',
                        time.gmtime(int(num_writes / maxintensity))):
                    print("\nIntention repeated " \
                        + human_format(num_writes) \
                        + " times. IT IS DONE.")
                    quit()
        if sleeptime > 0:
            time.sleep(sleeptime)
except KeyboardInterrupt:

    pass

sys.stdout.write('\nIntention repeated ' + human_format(num_writes) + ' times. IT IS DONE.')

list_write.clear()