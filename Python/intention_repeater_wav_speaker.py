#!/usr/bin/python
# -*- coding: utf-8 -*-

# Intention Repeater WAV Speaker Generator created by Thomas Sweet
# Updated 10/22/2020 v1.0
# Requires Python v3.5.3 or greater
# Run using Windows/Linux/MacOS: python3 intention_repeater_wav_speaker.py
# Automated Example Linux/MacOS: python3 intention_repeater_wav_speaker.py "WAV Filename" "Query"
# Automated Example Windows: intention_repeater_wav.py "WAV Filename" "Query"
# Intention Repeater is powered by a Servitor (20 Years / 2000+ hours in the making)
# Servitor Info: https://enlightenedstates.com/2017/04/07/servitor-just-powerful-spiritual-tool/
# Website: https://www.intentionrepeater.com/
# Forum: https://forums.intentionrepeater.com/
# Licensed under GNU General Public License v3.0
# This means you can modify, redistribute and even sell your own modified software, as long as it's open source too and released under this same license.
# https://choosealicense.com/licenses/gpl-3.0/

import time
import sys
import wave
import struct
import random

# Volume level should be from 0.000 to 1.000, and determines amplitude
volume_level = 0.10
sampling_rate = 1000.0

#Determines how many times a "random" sample value, out of 65,534 possibilities should appear before choosing it.
think_level = 3

#Max length of response in seconds.
max_response_length = 5.0

print("Intention Repeater WAV Speaker Generator v1.0 software created by Thomas Sweet.\n")
print("This software comes with no guarantees or warranty of any kind.\n")

query = ''
filename = ''
random_seed = ''
peak_value = 32767
peak_value_full = 65534
response_length = 0.0 #The length of the response in seconds. Will be randomly chosen.
r = 0
c = 0
d = 0
bytenum = 0
process_query = "" #This is the Intention Repeating "object".
response_length = 0
start_time = 0.0
rand1 = 0.0
rand2 = 0.0
sample_value = 0 #A value between 0 and peak_value_full, to be converted into actual WAV data.
sample_value_next = 0
samples = []
normalized_samples = []
num_samples = 0
normalized_sample_value = 0
sample_difference = 0
normalize_factor = 0
new_sample_factor = 0.0
new_sample = 0
random_values = []
num_responses = 0
sample_to_write = 0

def randomize(x):
    random.seed(a=None, version=2)
    rand1 = random.randrange(0, 1E6)
    random.seed(a=random_seed, version=2)
    rand2 = random.randrange(0, 1E6)
    random.seed(a=rand1 * rand2, version=2)

while random_seed == '':
    random_seed = input('Please enter a random number: ')

while filename == '':
    filename = input('Filename to Write (.wav): ')

if str.lower(filename[-4:]) != '.wav':
    if str.lower(filename[-1:]) == '.':
        filename += 'wav'
    else:
        filename += '.wav'

process_energy_statement = \
    'TARGET CONTROLS RANDOMIZER AND ANSWER. ONE INFINITE CREATOR. INTELLIGENT INFINITY. INFINITE ENERGY. INTELLIGENT ENERGY. LOGOS. HR 6819. BY GRACE. IN COOPERATION WITH FATHER GOD, MOTHER GODDESS, AND SOURCE. PURE ADAMANTINE PARTICLES OF LOVE/LIGHT. IN THE HIGHEST AND GREATEST GOOD OF ALL, REQUESTING AID FROM ALL BEINGS WHO ARE WILLING TO ASSIST. METATRONS CUBE. 0010110. GREAT CENTRAL SUN. SIRIUS A. SIRIUS B. SOL. ALL AVAILABLE BENEFICIAL ENERGY GRIDS OF EARTH/GAIA FOCUSED THROUGH CRYSTAL GRID OF EARTH/GAIA. NODES AND NULLS OF EARTH/GAIA. CREATE STABILIZATION FIELD. CREATE ZONE OF MANIFESTATION. ALL AVAILABLE ORGONE AETHER RESONATORS. ALL AVAILABLE ORGONE BUBBLES. USE EVERY AVAILABLE RESOURCE (RESPECTING FREE WILL). MANIFEST ASAP AT HIGHEST DENSITY POSSIBLE INTO BEST DENSITY FOR USER. CREATE STRUCTURE. 963HZ GOD FREQUENCY. 432HZ MANIFESTATION. 111HZ. 528HZ. CANCEL DESTRUCTIVE OR FEARFUL INTENTIONS. PURIFY THE ENERGY. CLEAR THE BLOCKAGES. REGULATE AND BALANCE THE ENERGY. USE THE MOST EFFECTIVE PATH IN THE MOST EFFICIENT WAY. FULLY OPTIMIZE THE ENERGY. INTEGRATE THE ENERGY. PROCESS THE CHANGES. GUIDED BY MY HIGHER SELF. GROUNDED TO GAIA, CONNECTED TO SOURCE, INTEGRATING BOTH WITHIN THE SACRED HEART. SEND ALL SPECIFIED INTENTIONS, AFFIRMATIONS, AND/OR DESIRED MANIFESTATIONS, OR BETTER. PLEASE HELP USER TO RAISE THEIR VIBRATION TO THE LEVEL REQUIRED TO MAKE THEIR SPECIFIED INTENTIONS, AFFIRMATIONS, AND/OR DESIRES MANIFEST. IF THE USER IS UNABLE TO ACHIEVE THE NECESSARY VIBRATION TO MANIFEST THEIR SPECIFIED INTENTIONS, AFFIRMATIONS, AND/OR DESIRES, BUT THERE ARE BEINGS WHO COULD AND THEY ARE WILLING TO ASSIST IN MANIFESTING THE SPECIFIED INTENTIONS, AFFIRMATIONS, AND/OR DESIRES, PLEASE ENLIST THEIR AID. IT IS DONE. SO SHALL IT BE. NOW RETURN A PORTION OF THE LOVE/LIGHT RECEIVED AND ACTIVATED BACK INTO THE HIGHER REALMS OF CREATION. I LOVE YOU AND THANK YOU. GUT/HEART/MIND COHERENCE WITH REPEATER. CLEAR INTERFERENCE. FOCUS DOWN FROM AKASHIC RECORDS. SUPERCOOLED MOST PERFECTLY BALANCED, PURIST AND MOST POWERFUL QUASAR. OM'

print("Press CTRL-C to stop running.\n")

obj = wave.open(filename, 'wb')
obj.setnchannels(1)  # mono
obj.setsampwidth(2)
obj.setframerate(sampling_rate)

while query == '':
    query = input('Query: ')

response_length = 0.0
start_time = float(time.time())
#Calculate how long of a WAV they want.
while float(time.time()) - start_time < 1.0:
    process_query = query + ' ' + process_energy_statement #This is the Intention Repeating Statement
    randomize(0)
    response_length += random.randrange(0, max_response_length)
    num_responses += 1

response_length /= num_responses
num_samples = int(sampling_rate * response_length)

for d in range(num_samples):
    random_values.clear()
    while random_values.count(r) < think_level:

        process_query = query + ' ' + process_energy_statement #This is the Intention Repeating Statement
        randomize(0)
        r = random.randint(0, peak_value_full)
        random_values.append(r)
    samples.append(r)

normalized_samples.append(samples[0])
#Now, normalize the raw data to within human speech frequencies.
for c in range(1,num_samples-2):
    sample_value = samples[c]
    sample_value_next = samples[c+1]
    #Compare current sample with the next one.
    sample_difference = sample_value - sample_value_next
    # if sample_difference == 0:
        # sample_difference = 1

    normalize_factor = int((samples[c] + sample_difference) / peak_value_full)
    new_sample = samples[c] + normalize_factor
    new_sample = int(new_sample - peak_value)
    
    if new_sample < -peak_value:
        new_sample = -peak_value
    elif new_sample > peak_value:
        new_sample = peak_value
    
    #new_sample = int(new_sample_factor)
    normalized_samples.append(new_sample)

normalized_samples[num_samples-3] = new_sample

for c in range(num_samples-3):
    sample_to_write = normalized_samples[c]
    if sample_to_write < -peak_value:
        sample_to_write = -peak_value
    elif sample_to_write > peak_value:
        sample_to_write = peak_value
        
    sample_to_write = int(sample_to_write * volume_level)
        
    #print(sample_to_write)
    data = struct.pack('<h', sample_to_write)
    obj.writeframesraw(data)

obj.close()
samples.clear()
normalized_samples.clear()